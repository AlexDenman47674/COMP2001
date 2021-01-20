using System;
using System.Collections.Generic;

#nullable disable

namespace COMP2001Part1._2.Models
{
    public partial class User
    {
        public User()
        {
            Passwords = new HashSet<Password>();
            Sessions = new HashSet<Session>();
        }

        public int UserId { get; set; }
        public string UserFirstName { get; set; }
        public string UserSecondName { get; set; }
        public string UserEmail { get; set; }
        public string CurrentPassword { get; set; }

        public virtual ICollection<Password> Passwords { get; set; }
        public virtual ICollection<Session> Sessions { get; set; }
    }
}
