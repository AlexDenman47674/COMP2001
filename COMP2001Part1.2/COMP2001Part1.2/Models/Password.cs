using System;
using System.Collections.Generic;

#nullable disable

namespace COMP2001Part1._2.Models
{
    public partial class Password
    {
        public int PasswordId { get; set; }
        public string PreviousPassword { get; set; }
        public DateTime? DateChanged { get; set; }
        public int UserId { get; set; }

        public virtual User User { get; set; }
    }
}
