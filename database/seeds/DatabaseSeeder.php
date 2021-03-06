<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    /**
     * @var array
     */
    protected $tables = [
        'users',
        'roles',
        'users_roles',
        'posts',
        'teams',
        'ideas',
        'teams_users',
        'categories',
        'thinkings',
        'cohorts',
        'cohorts_ideas',
        'cohorts_users',
        'comments',
        'posts'
    ];
    /**
     * @var array
     */
    protected $seeders = [
        'RolesTableSeeder',
        'CategoriesTableSeeder',
        'CohortsTableSeeder',
        'UsersTableSeeder',
        'TeamsTableSeeder',
        'PostsTableSeeder',
        'CommentsTableSeeder'
        
    ];
    
    
    /**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        $this->cleanDatabase();
        foreach ($this->seeders as $seedClass)
        {
            $this->call($seedClass);
        }
	}
    
    /**
     * Clean out the database for a new seed generation.
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table)
        {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
    
}
