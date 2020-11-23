<?php
declare(strict_types=1);

namespace Plaisio\RequestHandler;

use Plaisio\Response\Response;

/**
 * Interface for handling HTTP requests.
 */
interface RequestHandler
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * This event will be triggered after a page requested has been successfully handled and the response object has
   * been created.
   */
  const EVENT_END_RESPONSE = 4;

  /**
   * This event will be triggered after the database transaction has been commit. The observer CAN NOT access the
   * database or session data.
   */
  const EVENT_END_FINALIZE = 5;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds an observer that must be notified when an event occurs.
   *
   * The following events must be implemented be a concrete class:
   * <ul>
   * <li> EVENT_END_RESPONSE
   * <li> EVENT_END_FINALIZE
   * </ul>
   *
   * @param int      $event    The ID of the event.
   * @param callable $observer The observer that must be notified when the event occurs.
   *
   * @return void
   *
   * @api
   * @since 1.0.0
   */
  public function addListener(int $event, callable $observer): void;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the page currently requested.
   *
   * @return int|null
   *
   * @api
   * @since 1.0.0
   */
  public function getPagId(): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Handles a page request and returns the response that has been sent to the user agent.
   *
   * @return Response
   *
   * @api
   * @since 1.0.0
   */
  public function handleRequest(): Response;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
