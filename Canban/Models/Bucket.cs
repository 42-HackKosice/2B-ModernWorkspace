using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace Canban.Models
{
    public class Bucket
    {
        [Key]
        public int TypeID { get; set; }
        public string Name { get; set; }
        public int Order { get; set; }
        public int workGroupID { get; set; }
        public WorkGroup workGroup { get; set; }
        public IEnumerable<WorkTask> workTasks { get; set; }
    }
}
