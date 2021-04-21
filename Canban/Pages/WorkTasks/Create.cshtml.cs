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
    public class CreateModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;
        [BindProperty(SupportsGet = true)]
        public int bucketType { get; set; }

        public CreateModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        public IActionResult OnGet()
        {
            //ViewData["BucketID"] = new SelectList(_context.Bucket, "TypeID", "Name");
            var a = _context.Bucket
                   .Where(item => item.TypeID == bucketType)
                   .First();

            ViewData["BucketID"] =
                new SelectList((from s in _context.Bucket.Include(bucket => bucket.workGroup).ToList()
                               select new
                               {
                                   TypeID = s.TypeID,
                                   content = s.workGroup.Name + ", " + s.Name
                               }),"TypeID","content",a.TypeID) ;

            ViewData["UserList"] = new SelectList(_context.Users, "Id", "UserName");
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

            _context.WorkTask.Add(WorkTask);
            await _context.SaveChangesAsync();

            return RedirectToPage("./Index");
        }
    }
}
