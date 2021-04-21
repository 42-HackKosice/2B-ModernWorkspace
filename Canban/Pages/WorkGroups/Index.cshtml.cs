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
    public class IndexModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public IndexModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        public IList<WorkGroup> WorkGroup { get;set; }

        public async Task OnGetAsync()
        {
            WorkGroup = await _context.WorkGroup.Include(item => item.buckets).ThenInclude(item => item.workTasks).Include(item => item.employees).ToListAsync();
        }
    }
}
