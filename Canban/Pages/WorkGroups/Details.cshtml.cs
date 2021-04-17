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
    public class DetailsModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public DetailsModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

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
    }
}
