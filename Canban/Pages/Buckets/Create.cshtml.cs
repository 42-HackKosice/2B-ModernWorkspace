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
        [BindProperty(SupportsGet = true)]
        public string group { get; set; }

        public CreateModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        public IActionResult OnGet()
        {
            var a = _context.WorkGroup
                    .Where(item => item.Name == group)
                    .First();

            ViewData["workGroupID"] = new SelectList(_context.WorkGroup, "WorkGroupID", "Name", a.WorkGroupID);
            /*
            ViewData["workGroupID"] = new SelectList((from s in _context.WorkGroup 
                                                      select new 
                                                      {
                                                          WorkGroupID = s.WorkGroupID,
                                                          Name = s.Name,
                                                          Value = @group
                                                      }), "WorkGroupID", "Name", "Value");
            */
            return Page();
        }

        [BindProperty]
        public Bucket Bucket { get; set; }

        // To protect from overposting attacks, see https://aka.ms/RazorPagesCRUD
        public async Task<IActionResult> OnPostAsync()
        {
            if (!ModelState.IsValid)
            {
                return Page();
            }

            _context.Bucket.Add(Bucket);
            await _context.SaveChangesAsync();

            return RedirectToPage("/WorkGroups/Index");
        }
    }
}
