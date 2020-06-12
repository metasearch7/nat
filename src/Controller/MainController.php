<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('question_1', CheckboxType::class, ['label' => 'Недостаток энергии, упадок сил', 'required' => false])
            ->add('question_2', CheckboxType::class, ['label' => 'Заболевания более 2 раз в год', 'required' => false])
            ->add('question_3', CheckboxType::class, ['label' => 'Неприятный запах тела или изо рта', 'required' => false])
            ->add('question_4', CheckboxType::class, ['label' => 'Плохое переваривание некоторых продуктов ( чувство тяжести )', 'required' => false])
            ->add('question_5', CheckboxType::class, ['label' => 'Вы употребляете красное мясо 2 и более раз в неделю', 'required' => false])
            ->add('question_6', CheckboxType::class, ['label' => 'Проблемы с менструальным циклом (для женщин)', 'required' => false])
            ->add('question_7', CheckboxType::class, ['label' => 'Инсполуете антибиотики (другие лекарства) более 2 раз в год', 'required' => false])
            ->add('question_8', CheckboxType::class, ['label' => 'Регулярно употребляете алкоголь', 'required' => false])
            ->add('question_9', CheckboxType::class, ['label' => 'Частые перепады настроения', 'required' => false])
            ->add('question_10', CheckboxType::class, ['label' => 'Пищевая аллергия', 'required' => false])
            ->add('question_11', CheckboxType::class, ['label' => 'Темные круги и/или отечность под глазами', 'required' => false])
            ->add('question_12', CheckboxType::class, ['label' => 'Курите (в том числе и пассивно)', 'required' => false])
            ->add('question_13', CheckboxType::class, ['label' => 'Тредно сконцентрироваться, плохое запоминание', 'required' => false])
            ->add('question_14', CheckboxType::class, ['label' => 'Плохая переносимость болезненных состояний', 'required' => false])
            ->add('question_15', CheckboxType::class, ['label' => 'Дискомфорт после еды (изжога, газообразование)', 'required' => false])
            ->add('question_16', CheckboxType::class, ['label' => 'Нервная обстановка, частые стрессы', 'required' => false])
            ->add('question_17', CheckboxType::class, ['label' => 'Дефекты кожи и/или плохой цвет лица', 'required' => false])
            ->add('question_18', CheckboxType::class, ['label' => 'Потребление сладкого и переработанной пищи', 'required' => false])
            ->add('question_19', CheckboxType::class, ['label' => 'Избытачное употребление молочных продуктов', 'required' => false])
            ->add('question_20', CheckboxType::class, ['label' => 'Чувства аппатии, вялости, депрессия', 'required' => false])
            ->add('question_21', CheckboxType::class, ['label' => 'Сон,не приносящий отдыха, бессоница', 'required' => false])
            ->add('question_22', CheckboxType::class, ['label' => 'Период менопаузы (для женщин)', 'required' => false])
            ->add('question_23', CheckboxType::class, ['label' => 'Проблемы с мочеиспусканием', 'required' => false])
            ->add('question_24', CheckboxType::class, ['label' => 'Чувствительная (источенная) кожа, морщины', 'required' => false])
            ->add('question_25', CheckboxType::class, ['label' => 'Выпадение волос', 'required' => false])
            ->add('question_26', CheckboxType::class, ['label' => 'Отеки и боли в суставах', 'required' => false])
            ->add('question_27', CheckboxType::class, ['label' => 'Трудности сохранения нормального веса', 'required' => false])
            ->add('question_28', CheckboxType::class, ['label' => 'Быстрая утомляемость (недостаток силы, выносливости)', 'required' => false])
            ->add('question_29', CheckboxType::class, ['label' => 'Несоблюдение режима питания', 'required' => false])
            ->add('question_30', CheckboxType::class, ['label' => 'Медленное выздоравливание', 'required' => false])
            ->add('question_31', CheckboxType::class, ['label' => 'Нерегулярный стул', 'required' => false])
            ->add('question_32', CheckboxType::class, ['label' => 'Плохой аппетит', 'required' => false])
            ->add('question_33', CheckboxType::class, ['label' => 'Низкая сексуальная активность', 'required' => false])
            ->add('question_34', CheckboxType::class, ['label' => 'Истонченные и ломкие ногти (слоящиеся ногти)', 'required' => false])
            ->add('question_35', CheckboxType::class, ['label' => 'Сухие, тусклые, поврежденные волосы', 'required' => false])
            ->add('question_36', CheckboxType::class, ['label' => 'Употребление жирной пищи', 'required' => false])
            ->add('question_37', CheckboxType::class, ['label' => 'Недостаток клечатки в рационе', 'required' => false])
            ->add('question_38', CheckboxType::class, ['label' => 'Мышечный дискомфорт (боли, судороги)', 'required' => false])
            ->add('question_39', CheckboxType::class, ['label' => 'Неблагоприятная экология', 'required' => false])
            ->add('question_40', CheckboxType::class, ['label' => 'Дневная сонливость', 'required' => false])
            ->add('question_41', CheckboxType::class, ['label' => 'Ежедневное потребление более 2 чашек колы, кофе и крепкого чая', 'required' => false])
            ->add('question_42', CheckboxType::class, ['label' => 'Чуствительность к химикатам, лекарствам, пище', 'required' => false])
            ->add('question_43', CheckboxType::class, ['label' => 'Грибковые поражения', 'required' => false])
            ->add('question_44', CheckboxType::class, ['label' => 'Слабость в мышцах, хрупкость костей', 'required' => false])
            ->add('question_45', CheckboxType::class, ['label' => 'Постоянная тревога', 'required' => false])
            ->add('question_46', CheckboxType::class, ['label' => 'Повышенная раздражительность, чрезмерная возбудимость, злость', 'required' => false])
            ->add('question_47', CheckboxType::class, ['label' => 'Малоподвижный образ жизни, низкая физическая активность', 'required' => false])
            ->add('question_48', CheckboxType::class, ['label' => 'Повышенное выделение мокроты (выделение слизи)', 'required' => false])
            ->add('question_49', CheckboxType::class, ['label' => 'Большие поры на коже, повышенное салоотделение, угри', 'required' => false])
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();

            $calculationMatrix = [
                'Система переваривания и усвоения пищи' => [
                    'matrix' => [1, 4, 10, 14, 15, 17, 29, 31, 32, 34, 35, 36, 42, 43, 44, 45],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1, 2],
                        'Хорошо' => [3, 4],
                        'Зона риска' => [5, 6, 7, 8, 9],
                        'Неудовлетворительно' => [10],
                    ]
                ],
                'Желудочно-кишечный тракт' => [
                    'matrix' => [3, 5, 6, 7, 12, 13, 17, 19, 20, 29, 30, 31, 36, 37, 42, 43, 46, 47, 48],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1, 2],
                        'Хорошо' => [3, 4],
                        'Зона риска' => [5, 6, 7, 8, 9],
                        'Неудовлетворительно' => [10],
                    ]
                ],
                'Сердечно- сосудистая система' => [
                    'matrix' => [1, 5, 11, 12, 13, 16, 25, 26, 28, 30, 36, 37, 38, 40, 47],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1, 2],
                        'Хорошо' => [3],
                        'Зона риска' => [4, 5, 6, 7],
                        'Неудовлетворительно' => [8],
                    ]
                ],
                'Нервная система' => [
                    'matrix' => [1, 8, 9, 11, 16, 18, 20, 21, 22, 25, 27, 29, 31, 32, 38, 41, 45, 46, 47],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1, 2],
                        'Хорошо' => [3, 4, 5],
                        'Зона риска' => [6, 7, 8, 9],
                        'Неудовлетворительно' => [10],
                    ]
                ],
                'Иммунная система' => [
                    'matrix' => [1, 2, 4, 5, 7, 10, 14, 15, 16, 26, 27, 30, 39, 42, 43, 47],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1, 2],
                        'Хорошо' => [3, 4],
                        'Зона риска' => [5, 6, 7],
                        'Неудовлетворительно' => [8],
                    ]
                ],
                'Дыхательная система' => [
                    'matrix' => [3, 5, 10, 12, 19, 28, 39, 48],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0],
                        'Хорошо' => [1, 2, 3],
                        'Зона риска' => [4, 5],
                        'Неудовлетворительно' => [6],
                    ]
                ],
                'Мочевыводящая система' => [
                    'matrix' => [3, 6, 11, 17, 23, 35, 43],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0],
                        'Хорошо' => [1],
                        'Зона риска' => [2, 3, 4],
                        'Неудовлетворительно' => [5],
                    ]
                ],
                'Эндокринная система' => [
                    'matrix' => [1, 6, 8, 9, 13, 16, 17, 18, 20, 21, 22, 25, 27, 29, 30, 32, 33, 40, 41, 46, 47],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1, 2],
                        'Хорошо' => [3, 4, 5],
                        'Зона риска' => [6, 7, 8, 9],
                        'Неудовлетворительно' => [10],
                    ]
                ],
                'Опорно-двигательная система' => [
                    'matrix' => [17, 21, 22, 25, 26, 27, 28, 34, 38, 41, 44, 47],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1],
                        'Хорошо' => [2, 3],
                        'Зона риска' => [4, 5, 6, 7, 8],
                        'Неудовлетворительно' => [9],
                    ]
                ],
                'Кожа' => [
                    'matrix' => [2, 10, 11, 12, 16, 17, 24, 29, 31, 39, 49],
                    'result' => 0,
                    'conclusionMatrix' => [
                        'Очень хорошо' => [0, 1],
                        'Хорошо' => [2, 3],
                        'Зона риска' => [4, 5, 6],
                        'Неудовлетворительно' => [7],
                    ]
                ],
            ];


            foreach ($data as $index => $value) {

                if ($value === true) {
                    $t = explode('_', $index);
                    $questionNumber = (int)$t[1];

                    foreach ($calculationMatrix as &$system) {
                        if (in_array($questionNumber, $system['matrix'])) {
                            $system['result']++;
                        }
                    }

                    unset($system);
                }
            }

            $result = [];

            foreach ($calculationMatrix as $system => $value) {

                $result[$system]['value'] = $value['result'];

                foreach ($value['conclusionMatrix'] as $ratingName => $ratingValues) {

                    if (in_array($value['result'], $ratingValues)) {
                        $result[$system]['conclusion'] = $ratingName;
                    }

                    // если это последний элемент и не нашлось
                    if ($ratingName === array_key_last($value['conclusionMatrix']) && !isset($result[$system]['conclusion'])) {
                        $result[$system]['conclusion'] = $ratingName;
                    }
                }
            }

            return $this->render('main/results.html.twig', [
                'title' => 'Результаты',
                'page_title' => 'Результаты',
                'results' => $result
            ]);
        }

        return $this->render('main/index.html.twig', [
            'title' => 'Опросник',
            'page_title' => 'Опросник',
            'form' => $form->createView()
        ]);
    }
}
