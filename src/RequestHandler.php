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
   */
  public function getPagId(): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Handles a page request.
   */
  public function handleRequest(): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
