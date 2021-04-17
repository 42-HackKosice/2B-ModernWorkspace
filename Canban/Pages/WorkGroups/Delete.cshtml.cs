using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.EntityFrameworkCore;
using Canban.Data;
using Canban.Models;

namespace Canban.Pages.WorkGroups
{
    public class DeleteModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public DeleteModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        [BindProperty]
        public WorkGroup WorkGroup { get; set; }

        public async Task<IActionResult> OnGetAsync(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            WorkGroup = await _context.WorkGroup.FirstOrDefaultAsync(m => m.WorkGroupID == id);

            if (WorkGroup == null)
            {
                return NotFound();
            }
            return Page();
        }

        public async Task<IActionResult> OnPostAsync(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            WorkGroup = await _context.WorkGroup.FindAsync(id);

            if (WorkGroup != null)
            {
                _context.WorkGroup.Remove(WorkGroup);
                await _context.SaveChangesAsync();
            }

            return RedirectToPage("./Index");
        }
    }
}
