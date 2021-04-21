using Microsoft.EntityFrameworkCore.Migrations;

namespace Canban.Data.Migrations
{
    public partial class AddedPrices : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<bool>(
                name: "NeedHelp",
                table: "WorkTask",
                type: "bit",
                nullable: false,
                defaultValue: false);

            migrationBuilder.AddColumn<decimal>(
                name: "Price",
                table: "WorkTask",
                type: "decimal(18,2)",
                nullable: false,
                defaultValue: 0m);
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "NeedHelp",
                table: "WorkTask");

            migrationBuilder.DropColumn(
                name: "Price",
                table: "WorkTask");
        }
    }
}
