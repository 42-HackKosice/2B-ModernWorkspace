using System;
using Microsoft.EntityFrameworkCore.Migrations;

namespace Canban.Data.Migrations
{
    public partial class BucketsCreate : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<DateTime>(
                name: "until",
                table: "WorkTask",
                type: "datetime2",
                nullable: false,
                defaultValue: new DateTime(1, 1, 1, 0, 0, 0, 0, DateTimeKind.Unspecified));
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "until",
                table: "WorkTask");
        }
    }
}
