<?php

use Uniform\Form;


return [
    # Routes & redirects go here
    [
        'pattern' => '/',
        'method' => 'POST',
        'action' => function () {
            $form = new Form([
                'name' => [
                    'rules' => ['required'],
                    'message' => 'Bitte gib deinen Namen ein',
                ],
                'email' => [
                    'rules' => ['required', 'email'],
                    'message' => 'Bitte gib deine E-Mail-Adresse ein',
                ],
                'message' => [
                    'rules' => ['required'],
                    'message' => 'Bitte gib eine Nachricht ein',
                ],
            ]);

            // Perform validation and execute guards.
            $form->withoutFlashing()
                ->withoutRedirect()
                ->guard();

            if (!$form->success()) {
                // Return validation errors.
                return Response::json($form->errors(), 400);
            }

            // If validation and guards passed, execute the action.
            $form->emailAction([
                'to' => 'hello@twobrain.io',
                'from' => 'mail@neues-zeug.de',
                'subject' => 'Nachricht von {{email}} (via neues-zeug.de)',
            ])->logAction([
                'file' => kirby()->roots()->site() . '/messages.log',
            ]);

            if (!$form->success()) {
                // This should not happen and is our fault.
                return Response::json($form->errors(), 500);
            }

            // Return code 200 on success.
            return Response::json([], 200);
        }
    ],
    [
        // Simple xml sitemap, see https://getkirby.com/docs/cookbook/content/sitemap
        'pattern' => 'sitemap.xml',
        'action'  => function() {
            $pages = site()->pages()->index();

            // fetch the pages to ignore from the config settings,
            // if nothing is set, we ignore the error page
            $ignore = kirby()->option('sitemap.ignore', ['error']);

            $content = snippet('sitemap', compact('pages', 'ignore'), true);

            // return response with correct header type
            return new Kirby\Cms\Response($content, 'application/xml');
        }
    ],
    [
        'pattern' => 'sitemap',
        'action'  => function() {
            return go('sitemap.xml', 301);
        }
    ]
];
