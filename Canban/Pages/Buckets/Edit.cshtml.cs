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
        public Bucket Bucket { get; set; }

        public async Task<IActionResult> OnGetAsync(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            Bucket = await _context.Bucket
                .Include(b => b.workGroup).FirstOrDefaultAsync(m => m.TypeID == id);

            if (Bucket == null)
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

            _context.Attach(Bucket).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!BucketExists(Bucket.TypeID))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return RedirectToPage("/WorkGroups/Index");
        }

        private bool BucketExists(int id)
        {
            return _context.Bucket.Any(e => e.TypeID == id);
        }
    }
}
