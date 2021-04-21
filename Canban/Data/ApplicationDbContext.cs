using Microsoft.AspNetCore.Identity.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Text;
using Canban.Models;

namespace Canban.Data
{
    public class ApplicationDbContext : IdentityDbContext
    {
        public ApplicationDbContext(DbContextOptions<ApplicationDbContext> options)
            : base(options)
        {
        }

        public DbSet<Canban.Models.WorkGroup> WorkGroup { get; set; }

        public DbSet<Canban.Models.Bucket> Bucket { get; set; }

        public DbSet<Canban.Models.WorkTask> WorkTask { get; set; }

        public DbSet<Canban.Models.Employee> Employee { get; set; }
    }
}
