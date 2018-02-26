<?php
namespace App\Traits;
use Bimmunity\Ticketing\Models\Ticket;
trait Actionable
{
    public function actionablecreate($input,$actionable_type,$actionable_id){
        if(isset($input['ticket_id']) && isset($input['action_id']) ){
            $ticket = Ticket::find($input['ticket_id']);
            $actionable_type->tickets()->attach($ticket,['action_id'=>$input['action_id']]);
            return true;
        }
        return false;
   }
    public function tickets()
    {
        return $this->morphToMany('\Bimmunity\Ticketing\Models\Ticket', 'actionable');
    }
}