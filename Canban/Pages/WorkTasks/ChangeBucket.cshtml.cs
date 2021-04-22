using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.EntityFrameworkCore;
using Canban.Models;

namespace Canban.Pages.WorkTasks
{
    public class ChangeBucketModel : PageModel
    {
        [BindProperty(SupportsGet = true)]
        public int? id { get; set; }
        [BindProperty(SupportsGet = true)]
        public string change { get; set; }
        [BindProperty(SupportsGet = true)]
        public string group { get; set; }

        public Data.ApplicationDbContext _context { get; set; }

        public WorkTask WorkTask { get; set; }

        public ChangeBucketModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        public async Task<IActionResult> OnGet()
        {
            if (id != null && change != null)
            {
                WorkTask = await _context.WorkTask
                .Include(w => w.bucket).FirstOrDefaultAsync(m => m.TaskID == id);

                var CurrentBuckets = from Bucket in _context.Bucket.Include(e => e.workGroup)
                                     where Bucket.workGroup.Name.Equals(@group)
                                     select Bucket;


                if (change.Equals("left"))
                {
                    var i = 0;
                    foreach (var bucket in CurrentBuckets.OrderByDescending(e => e.Order))
                    {
                        var ID = bucket.TypeID;
                        if (i == 1)
                        {
                            WorkTask.BucketID = ID;
                            break;
                        }
                        if (ID == WorkTask.BucketID)
                            i++;
                    }
                }   else if (change.Equals("right"))
                {
                    var i = 0;
                    foreach (var bucket in CurrentBuckets.OrderBy(e => e.Order))
                    {
                        var ID = bucket.TypeID;
                        if (i == 1)
                        {
                            WorkTask.BucketID = ID;
                            break;
                        }
                        if (ID == WorkTask.BucketID)
                            i++;
                    }
                }
            }
            if (WorkTask.bucket.Name.Contains("Complete"))
                WorkTask.NeedHelp = false;
            await _context.SaveChangesAsync();
            return RedirectToPage("/WorkGroups/Index");
        }
    }
}
