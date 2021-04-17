using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace Canban.Models
{
    public class WorkTask
    {
        [Key]
        public int TaskID { get; set; }
        public string TaskName { get; set; }
#nullable enable
        public string? TaskDescription { get; set; }
        public string? UserID { get; set; }
#nullable disable
        public int WorkGroupID { get; set; }
        public WorkGroup workGroup { get; set; }
    }
}
