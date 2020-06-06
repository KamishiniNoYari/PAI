using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data;
using System.Data.Entity;
namespace PAI9.Models
{
    public class MusicDbContext : DbContext 
    {
        public DbSet<Song> Songs { get; set; }
        
        public DbSet<Genre> Genres { get; set; }
    }
}