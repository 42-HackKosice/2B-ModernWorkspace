using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Canban.Data;

namespace Canban.Models
{
    public class Employee
    {
        public int EmployeeID { get; set; }
        public string UserID { get; set; }
        
        public int workGroupID { get; set; }
        public WorkGroup workGroup { get; set; }

    }
}
