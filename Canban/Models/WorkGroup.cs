using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace Canban.Models
{
    public class WorkGroup
    {
        public int WorkGroupID { get; set; }
        public string Name { get; set; }
#nullable enable
        public string? description { get; set; }
#nullable disable
        public IEnumerable<Bucket> buckets { get; set; }
    }
}
