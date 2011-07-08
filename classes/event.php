<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Plugin Event
 */
class Event
{
	/**
	* Attaches a new subscription to a signal queue.
	*
	* NOTE: Passing an array as the signal parameter should be done only
	*       once per subscription que as each time a new Queue is created.
	*
	*
	* @param  mixed  $signal  Signal the subscription will attach to, this
	*         can be a Signal object, the signal representation or an array
	*         for a chained signal.
	*
	* @param  mixed  $subscription  Subscription closure that will trigger on
	*         fire or a Subscription object.
	*
	* @param  mixed  $identifier  String identifier for this subscription, if
	*         an integer is provided it will be treated as the priority.
	*
	* @param  mixed  $priority  Priority of this subscription within the Queue
	*
	* @throws  InvalidArgumentException  Thrown when an invalid callback is
	*          provided.
	*
	* @return  void
	*/
	static public function subscribe($signal, $subscription, $identifier = null, $priority = null)
	{
		subscribe($signal, $subscription, $identifier, $priority);
	}

	static public function fire($signal, $vars = null, $event = null)
	{
		fire($signal, $vars, $event);
	}
}
// End Event
