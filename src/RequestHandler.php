<?php

namespace SetBased\Abc\RequestHandler;

/**
 * Interface for classes for handling page requests.
 */
interface RequestHandler
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the page currently requested.
   *
   * @return int
   *
   * @api
   * @since 3.0.0
   */
  public function getPagId(): int;

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
