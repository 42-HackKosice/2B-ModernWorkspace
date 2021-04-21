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

namespace Canban.Pages.WorkTasks
{
    public class EditModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public EditModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        [BindProperty]
        public WorkTask WorkTask { get; set; }

        public async Task<IActionResult> OnGetAsync(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            WorkTask = await _context.WorkTask
                .Include(w => w.bucket).FirstOrDefaultAsync(m => m.TaskID == id);

            if (WorkTask == null)
            {
                return NotFound();
            }
            ViewData["BucketID"] =
                new SelectList((from s in _context.Bucket.Include(bucket => bucket.workGroup).ToList()
                                select new
                                {
                                    TypeID = s.TypeID,
                                    content = s.workGroup.Name + ", " + s.Name
                                }), "TypeID", "content").OrderBy(x=>x.Group);
            ViewData["UserList"] = new SelectList(_context.Users,"Id","UserName");
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

            _context.Attach(WorkTask).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!WorkTaskExists(WorkTask.TaskID))
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

        private bool WorkTaskExists(int id)
        {
            return _context.WorkTask.Any(e => e.TaskID == id);
        }
    }
}
