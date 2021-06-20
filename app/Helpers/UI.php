<?php

namespace App\Helpers;

class UI
{
  const NOTIFY_SESSNAME = 'notif';
  const NOTIFY_SUCCESS_SESSNAME = 'success';
  const NOTIFY_ERROR_SESSNAME = 'error';
  const NOTIFY_INFO_SESSNAME = 'info';
  const NOTIFY_WARNING_SESSNAME = 'warning';
  const NOTIFY_PRIMARY_SESSNAME = 'primary';
  const NOTIFY_SECONDARY_SESSNAME = 'secondary';

  public static $notifications = [];

  public static function notify(string $type, string $message)
  {
    UI::$notifications = collect(UI::$notifications)
      ->push(['type' => $type, 'message' => $message])
      ->all();

    session()
      ->flash(
        UI::NOTIFY_SESSNAME,
        collect(UI::$notifications)
      );
  }

  public static function notifySuccess(string ...$messages)
  {
    collect(...$messages)
      ->each(fn ($msg) => UI::notify(UI::NOTIFY_SUCCESS_SESSNAME, $msg));
  }

  public static function notifyError(string ...$messages)
  {
    collect(...$messages)
      ->each(fn ($msg) => UI::notify(UI::NOTIFY_SUCCESS_SESSNAME, $msg));
  }

  public static function notifyInfo(string ...$messages)
  {
    collect(...$messages)
      ->each(fn ($msg) => UI::notify(UI::NOTIFY_SUCCESS_SESSNAME, $msg));
  }

  public static function notifyWarning(string ...$messages)
  {
    collect(...$messages)
      ->each(fn ($msg) => UI::notify(UI::NOTIFY_SUCCESS_SESSNAME, $msg));
  }
}
