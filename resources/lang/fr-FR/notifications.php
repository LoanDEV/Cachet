<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 *
 *  Traduit par: Loan TALVAT / contact@loan-dev.fr
 *
 */

return [
    'composant' => [
        'status_update' => [
            'mail' => [
                'subject' => 'État du composant mis à jour',
                'greeting' => 'Le statut d\'un composant a été mis à jour!',
                'content' => 'Le statut :name est passé de :old_status à :new_status.',
                'action' => 'Afficher',
            ],
            'slack' => [
                'title' => 'Statut du composant mis à jour',
                'content' => 'Le statut :name est passé de :old_status à :new_status.',
            ],
            'sms' => [
                'content' => 'Le statut :name est passé de :old_status à :new_status.',
            ],
        ],
    ],
    'incident' => [
        'new' => [
            'mail' => [
                'subject' => '⚠️ Nouvel incident signalé ⚠️',
                'greeting' => 'Un nouvel incident a été signalé sur :app_name.',
                'content' => 'Incident :name a été signalé',
                'action' => 'Afficher',
            ],
            'slack' => [
                'title' => 'Incident :name signalé',
                'content' => 'Un nouvel incident a été signalé sur :app_name',
            ],
            'sms' => [
                'content' => 'Un nouvel incident a été signalé sur :app_name.',
            ],
        ],
        'update' => [
            'mail' => [
                'subject' => '🔔 Incident mis à jour 🔔',
                'content' => ':name a été mis à jour',
                'title' => ':name a été mis à jour pour :new_status',
                'action' => 'Afficher',
            ],
            'slack' => [
                'title' => ': nom mis à jour',
                'content' => ': le nom a été mis à jour vers: new_status',
            ],
            'sms' => [
                'content' => 'Incident: le nom a été mis à jour',
            ],
        ],
    ],
    'schedule' => [
        'new' => [
            'mail' => [
                'subject' => 'Nouvelle planification créée',
                'content' => ':name était prévu pour :date',
                'title' => 'Une nouvelle maintenance planifiée a été créée.',
                'action' => 'Afficher',
            ],
            'slack' => [
                'title' => 'Nouvelle programmation créée!',
                'content' => ':name était prévu pour :date',
            ],
            'sms' => [
                'content' => ':name était prévu pour :date',
            ],
        ],
    ],
    'subscriber' => [
        'verify' => [
            'mail' => [
                'subject' => 'Confirmer votre abonnement',
                'content' => 'Cliquez pour confirmer votre abonnement à la page de statut :app_name.',
                'title' => 'Confirmer votre abonnement à la page de statut :app_name.',
                'action' => 'Vérifier',
            ],
        ],
    ],
    'system' => [
        'test' => [
            'mail' => [
                'subject' => 'Ping de Cachet!',
                'content' => 'Ceci est une notification de test de Cachet!',
                'title' => '🔔',
            ],
        ],
    ],
    'user' => [
        'invite' => [
            'mail' => [
                'subject' => 'Une invitation vous attend ...',
                'content' => 'Vous avez été invité à rejoindre :app_name.',
                'title' => 'Vous êtes invité à rejoindre la page de status :app_name.',
                'action' => 'Accepter',
            ],
        ],
    ],
];
