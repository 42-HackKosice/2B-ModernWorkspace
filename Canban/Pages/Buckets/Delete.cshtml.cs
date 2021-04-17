using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.EntityFrameworkCore;
using Canban.Data;
using Canban.Models;

namespace Canban.Pages.Buckets
{
    public class DeleteModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public DeleteModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        [BindProperty]
        public TypesOfBucket TypesOfBucket { get; set; }

        public async Task<IActionResult> OnGetAsync(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            TypesOfBucket = await _context.TypesOfBucket
                .Include(t => t.workGroup).FirstOrDefaultAsync(m => m.TypeID == id);

            if (TypesOfBucket == null)
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

            TypesOfBucket = await _context.TypesOfBucket.FindAsync(id);

            if (TypesOfBucket != null)
            {
                _context.TypesOfBucket.Remove(TypesOfBucket);
                await _context.SaveChangesAsync();
            }

            return RedirectToPage("./Index");
        }
    }
}
