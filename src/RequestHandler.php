<?php
declare(strict_types=1);

namespace Plaisio\RequestHandler;

/**
 * Interface for handling HTTP requests.
 */
interface RequestHandler
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Adds a listener that must be notified when an event occurs.
   *
   * The following events must be implemented be a concrete class:
   * <ul>
   * <li> post_render: This event occurs after a page requested has been successfully handled.
   * <li> post_commit: This event occurs after a page requested has been handled and the database transaction has been
   *                   committed. The listener CAN NOT access the database or session data.
   * </ul>
   *
   * @param string   $event    The name of the event.
   * @param callable $listener The listener that must be notified when the event occurs.
   *
   * @return void
   *
   * @api
   * @since 1.0.0
   */
  public function addListener(string $event, callable $listener): void;

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
   * Handles a page request.
   *
   * @api
   * @since 1.0.0
   */
  public function handleRequest(): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
