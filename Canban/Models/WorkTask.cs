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
        public DateTime until { get; set; }
        public string? TaskDescription { get; set; }
        public string? UserID { get; set; }
        public decimal Price { get; set; }
#nullable disable
        public bool NeedHelp { get; set; }
        public int BucketID { get; set; }
        public Bucket bucket { get; set; }

    }
}
