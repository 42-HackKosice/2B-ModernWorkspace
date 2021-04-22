using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Canban.Models;

using Microsoft.AspNetCore.Identity;

namespace Canban.Pages.WorkTasks
{
    public class AssignTaskModel : PageModel
    {
        [BindProperty(SupportsGet = true)]
        public int id { get; set; }
        public Data.ApplicationDbContext _context { get; set; }
        public UserManager<IdentityUser> _userManager { get; set; }

        public WorkTask WorkTask { get; set; }

        public AssignTaskModel(Canban.Data.ApplicationDbContext context, UserManager<IdentityUser> userManager)
        {
            _context = context;
            _userManager = userManager;
        }

        public async Task<IActionResult> OnGet()
        {
            WorkTask = _context.WorkTask.
                Where(x => x.TaskID == id)
                .FirstOrDefault();
            if(WorkTask.UserID == null)
                WorkTask.UserID = _userManager.GetUserId(User);
            await _context.SaveChangesAsync();
            return RedirectToPage("/WorkGroups/Index");
        }
    }
}
