<?php
    interface Notify
    {
        public function send($subject, $template, $data);
    }
    