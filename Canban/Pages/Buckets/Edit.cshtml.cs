using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using Canban.Data;
using Canban.Models;

namespace Canban.Pages.Buckets
{
    public class EditModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public EditModel(Canban.Data.ApplicationDbContext context)
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
           ViewData["workGroupID"] = new SelectList(_context.WorkGroup, "WorkGroupID", "WorkGroupID");
            return Page();
        }

        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see https://aka.ms/RazorPagesCRUD.
        public async Task<IActionResult> OnPostAsync()
        {
            if (!ModelState.IsValid)
            {
                return Page();
            }

            _context.Attach(TypesOfBucket).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!TypesOfBucketExists(TypesOfBucket.TypeID))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return RedirectToPage("./Index");
        }

        private bool TypesOfBucketExists(int id)
        {
            return _context.TypesOfBucket.Any(e => e.TypeID == id);
        }
    }
}
