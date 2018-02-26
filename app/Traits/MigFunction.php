<?php
namespace App\Traits;

trait MigFunction
{
	public function file_string($modelName, $fileds)
	{
		$content = "<?php\n
			use Illuminate\Support\Facades\Schema;\n
			use Illuminate\Database\Schema\Blueprint;\n
			use Illuminate\Database\Migrations\Migration;\n

			class Create".str_replace(' ', '',ucwords(strtolower(str_replace('_', '',$modelName))))."Table extends Migration
			{
			    /**
			     * Run the migrations.
			     *
			     * @return void
			     */
			    public function up()
			    {
			        Schema::create("."'".strtolower(str_replace(' ', '_',$modelName))."', function (Blueprint \$table) {
			            \$table->increments('id');".
			            $fileds.
			            "
						\$table->timestamps();
						\$table->softDeletes();						
						\$table->integer('ticket_id')->nullable();
						\$table->integer('ticket_action_id')->nullable();
			        });
			    }

			    /**
			     * Reverse the migrations.
			     *
			     * @return void
			     */
			    public function down()
			    {
			        Schema::dropIfExists('".strtolower(str_replace(' ', '_',$modelName))."');
			    }
			}
			";

			return $content;
	}
	public function get_name($fileName)
	{
		$newName = explode(':', $fileName);
        $requiredName = $newName[1];
        $requiredName = str_replace(' ', '', $requiredName);
        $requiredName=preg_replace( "/\r|\n/", "",  $requiredName);

        return $requiredName;
	}
}
