<?php


namespace CodeBot\TemplatesMessage;


use CodeBot\Element\ElementInterface;
use CodeBot\Message\Message;

class ButtonsTemplate implements Message
{

    protected $buttons = [];
    protected $recipientId;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function add(ElementInterface $element) {
        $this->buttons[] = $element;
    }

    public function message(string $messageText): array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => $messageText,
                        'buttons' => $this->buttons,
                    ]
                ]
            ]
        ];
    }
}