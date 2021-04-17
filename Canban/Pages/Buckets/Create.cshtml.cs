using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.AspNetCore.Mvc.Rendering;
using Canban.Data;
using Canban.Models;

namespace Canban.Pages.Buckets
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
        ViewData["workGroupID"] = new SelectList(_context.WorkGroup, "WorkGroupID", "WorkGroupID");
            return Page();
        }

        [BindProperty]
        public TypesOfBucket TypesOfBucket { get; set; }

        // To protect from overposting attacks, see https://aka.ms/RazorPagesCRUD
        public async Task<IActionResult> OnPostAsync()
        {
            if (!ModelState.IsValid)
            {
                return Page();
            }

            _context.TypesOfBucket.Add(TypesOfBucket);
            await _context.SaveChangesAsync();

            return RedirectToPage("./Index");
        }
    }
}
