using System;
using System.Collections.Generic;

#nullable disable

namespace COMP2001Part1._2.Models
{
    public partial class VisitsView
    {
        public int CustomerId { get; set; }
        public string CustomerName { get; set; }
        public DateTime? DateOfBooking { get; set; }
    }
}
