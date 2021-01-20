using System;
using System.Collections.Generic;

#nullable disable

namespace COMP2001Part1._2.Models
{
    public partial class Session
    {
        public int SessionId { get; set; }
        public DateTime? IssueDate { get; set; }
        public int UserId { get; set; }

        public virtual User User { get; set; }
    }
}
