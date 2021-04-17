using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.AspNetCore.Mvc.Rendering;
using Canban.Data;
using Canban.Models;

namespace Canban.Pages.WorkTasks
{
    public class CreateModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public CreateModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        public IActionResult OnGet()
        {
        ViewData["WorkGroupID"] = new SelectList(_context.Set<WorkGroup>(), "WorkGroupID", "WorkGroupID");
            return Page();
        }

        [BindProperty]
        public WorkTask WorkTask { get; set; }

        // To protect from overposting attacks, see https://aka.ms/RazorPagesCRUD
        public async Task<IActionResult> OnPostAsync()
        {
            if (!ModelState.IsValid)
            {
                return Page();
            }

            _context.Task.Add(WorkTask);
            await _context.SaveChangesAsync();

            return RedirectToPage("./Index");
        }
    }
}
