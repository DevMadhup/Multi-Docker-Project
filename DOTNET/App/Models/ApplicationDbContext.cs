using Microsoft.EntityFrameworkCore;

namespace MyWebApp.Models
{
    public class ApplicationDbContext : DbContext
    {
        public ApplicationDbContext(DbContextOptions<ApplicationDbContext> options)
            : base(options)
        {
        }

        // Define DbSets for your entities
        public DbSet<MyEntity> MyEntities { get; set; }
    }
}
