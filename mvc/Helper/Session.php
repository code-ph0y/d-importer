<?php

namespace Mvc\Helper;

class Session
{
    const SESSION_STARTED     = TRUE;
    const SESSION_NOT_STARTED = FALSE;

    // The state of the session
    private $sessionState = self::SESSION_NOT_STARTED;

    // The only instance of the class
    private static $instance;

    public function __construct()
    {

    }

    /**
    *    Returns THE instance of 'Session'.
    *    The session is automatically initialized if it wasn't.
    *
    *    @return    object
    **/
    public static function getInstance()
    {
        if ( !isset(self::$instance))
        {
            self::$instance = new self;
        }

        self::$instance->startSession();

        return self::$instance;
    }

    /**
    *    (Re)starts the session.
    *
    *    @return    bool    TRUE if the session has been initialized, else FALSE.
    **/
    public function startSession()
    {
        if ( $this->sessionState == self::SESSION_NOT_STARTED )
        {
            $this->sessionState = session_start();
        }

        $this->incrementTtl();

        return $this->sessionState;
    }

    /**
     * Get all session variable
     *
     * @return mixed
     */
    public function getAll()
    {
        return $_SESSION;
    }

    /**
     * Check to see if the session has a variable set
     *
     * @param  string  $key The session key too check
     * @return boolean
     */
    public function has($key) {
        return isset($_SESSION[$key]);
    }

    /**
     * Get a session variable
     *
     * @param  string $key The variable too get
     * @return mixed
     */
    public function get($key)
    {
        if ($this->has($key)) {
            return $_SESSION[$key];
        }

        return false;
    }

    /**
     * Set a session variable
     *
     * @param string $key           Name of session variable to set
     * @param mixed  $value         Value to set
     * @param int    $timeToLive    The number of times it will be in the session before it is unset
     */
    public function set($key, $value, $timeToLive = null)
    {
        $_SESSION[$key] = $value;

        if (!is_null($timeToLive)) {
            $_SESSION['ttl_variable_' . $key] = $timeToLive;
        }
    }

    /**
     * Unset a session variable
     *
     * @param string $key The key to unset
     */
    public function unset($key)
    {
        unset($_SESSION[$key]);
    }

    /**
    *    Destroys the current session.
    *
    *    @return    bool    TRUE is session has been deleted, else FALSE.
    **/
    public function destroy()
    {
        if ($this->sessionState == self::SESSION_STARTED) {
            $this->sessionState = !session_destroy();
            unset($_SESSION);

            return !$this->sessionState;
        }

        return false;
    }

    /**
     * Increment and Unset Session Variables that have a Time To Live
     *
     * @return void
     */
    public function incrementTtl() {
        $params = $this->getAll();

        // find all time to live variables and increment
        foreach ($params as $key => $value) {
            if (false !== stripos($key, 'ttl_variable_')) {
                $updated_value = (int) --$value;

                if ($updated_value < 0) {
                    // unset the variable if its counter is
                    $this->unset($key);

                    $variable = str_replace('ttl_variable_', '', $key);

                    $this->unset($variable);
                }

                // Update value
                $this->set($key, $updated_value);
            }
        }
    }
}
