<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RolesTableSeeder::class);
        $this->command->info("Roles table seeded :)");
        $this->call(UsersTableSeeder::class);
        $this->command->info("Users table seeded :)");
        $this->call(TaxonomyTableSeeder::class);
        $this->command->info("Taxonomy table seeded :)");
        $this->call(CategoryTableSeeder::class);
        $this->command->info("Category table seeded :)");

        $this->call(SitesTableSeeder::class);
        $this->command->info("Sites table seeded :)");
        $this->call(SiteZonesTableSeeder::class);
        $this->command->info("SiteZones table seeded :)");
        $this->call(BuildingsTableSeeder::class);
        $this->command->info("Buildings table seeded :)");
        $this->call(ZonesTableSeeder::class);
        $this->command->info("Zones table seeded :)");

        $this->call(EquipmentsTableSeeder::class);
        $this->command->info("Equipments table seeded :)");
        $this->call(ZonesHasEquipmentsTableSeeder::class);
        $this->command->info("ZonesHasEquipments table seeded :)");

        // $this->call(ServicesTableSeeder::class);
        // $this->command->info("Services table seeded :)");
        // $this->call(RequestsTableSeeder::class);
        // $this->command->info("Requests table seeded :)");
        // $this->call(PermissionTableSeeder::class);
        // $this->command->info("Permisssion table seeded :)");
        $this->call(PrioritiesTableSeeder::class);
        $this->command->info("Priorities table seeded :)");
        $this->call(SystemsTableSeeder::class);
        $this->command->info("Systems table seeded :)");
        $this->call(ReservationItemsTableSeeder::class);
        $this->command->info("Systems table seeded :)");
        $this->call(CurrenciesTableSeeder::class);
        //$this->call(FinancialTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(BimModelsTableSeeder::class);
        $this->call(SpacesTableSeeder::class);
        $this->command->info("Spaces table seeded :)");
        $this->call(BimSyestemTableSeeder::class);
        $this->command->info("BimSyestem table seeded :)");
        $this->call(FinancialTableSeeder::class);
        $this->command->info("FinancialTableSeeder table seeded :)");
        $this->call(InvoicesTableSeeder::class);
        $this->command->info("InvoicesTableSeeder table seeded :)");
        $this->call(FacilitiesTableSeeder::class);
        $this->command->info("FacilitiesTableSeeder table seeded :)");
        $this->call(FielsTableSeeder::class);
        $this->command->info("FielsTableSeeder table seeded :)");
        $this->call(FileablesTableSeeder::class);
        $this->command->info("FileablesTableSeeder table seeded :)");
        

        
    }
}
