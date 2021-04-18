using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.EntityFrameworkCore;
using Canban.Data;
using Canban.Models;

namespace Canban.Pages.WorkTasks
{
    public class DetailsModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public DetailsModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

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
            return Page();
        }
    }
}
