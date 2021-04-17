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
        public DbSet<Canban.Models.WorkTask> Task { get; set; }
        public DbSet<Canban.Models.WorkGroup> WorkGroup { get; set; }
        public DbSet<Canban.Models.TypesOfBucket> TypesOfBucket { get; set; }
    }
}
