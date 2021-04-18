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
    public class IndexModel : PageModel
    {
        private readonly Canban.Data.ApplicationDbContext _context;

        public IndexModel(Canban.Data.ApplicationDbContext context)
        {
            _context = context;
        }

        public IList<Bucket> Bucket { get;set; }

        public async Task OnGetAsync()
        {
            Bucket = await _context.Bucket
                .Include(b => b.workGroup).ToListAsync();
        }
    }
}
