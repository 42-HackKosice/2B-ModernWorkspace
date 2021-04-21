using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.AspNetCore.Mvc.Rendering;
using Canban.Data;
using Canban.Models;

namespace Canban.Pages.Employees
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
            ViewData["workGroupID"] = new SelectList(_context.WorkGroup, "WorkGroupID", "Name");
            ViewData["UserList"] = new SelectList(_context.Users,"Id","UserName");
            return Page();
        }

        [BindProperty]
        public Employee Employee { get; set; }

        // To protect from overposting attacks, see https://aka.ms/RazorPagesCRUD
        public async Task<IActionResult> OnPostAsync()
        {
            if (!ModelState.IsValid)
            {
                return Page();
            }

            _context.Employee.Add(Employee);
            await _context.SaveChangesAsync();

            return RedirectToPage("./Index");
        }
    }
}
