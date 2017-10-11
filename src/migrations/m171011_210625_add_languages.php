<?php

use yii\db\Migration;

class m171011_210625_add_languages extends Migration
{
    public function safeUp()
    {
        $time = time();

        $languages = [
            ['Afrikaans', 'Afrikaans', $time, $time],
            ['‏العربية‏', 'Arabic', $time, $time],
            ['Azərbaycan dili', 'Azerbaijani', $time, $time],
            ['Беларуская', 'Belarusian', $time, $time],
            ['Български', 'Bulgarian', $time, $time],
            ['বাংলা', 'Bengali', $time, $time],
            ['Bosanski', 'Bosnian', $time, $time],
            ['Català', 'Catalan', $time, $time],
            ['Čeština', 'Czech', $time, $time],
            ['Cymraeg', 'Welsh', $time, $time],
            ['Dansk', 'Danish', $time, $time],
            ['Deutsch', 'German', $time, $time],
            ['Ελληνικά', 'Greek', $time, $time],
            ['English (UK)', 'English (UK)', $time, $time],
            ['English (Pirate)', 'English (Pirate)', $time, $time],
            ['English (Upside Down)', 'English (Upside Down)', $time, $time],
            ['English (US)', 'English (US)', $time, $time],
            ['Esperanto', 'Esperanto', $time, $time],
            ['Español (España)', 'Spanish (Spain)', $time, $time],
            ['Español', 'Spanish', $time, $time],
            ['Eesti', 'Estonian', $time, $time],
            ['Euskara', 'Basque', $time, $time],
            ['‏فارسی‏', 'Persian', $time, $time],
            ['Leet Speak', 'Leet Speak', $time, $time],
            ['Suomi', 'Finnish', $time, $time],
            ['Føroyskt', 'Faroese', $time, $time],
            ['Français (Canada)', 'French (Canada)', $time, $time],
            ['Français (France)', 'French (France)', $time, $time],
            ['Frysk', 'Frisian', $time, $time],
            ['Gaeilge', 'Irish', $time, $time],
            ['Galego', 'Galician', $time, $time],
            ['‏עברית‏', 'Hebrew', $time, $time],
            ['हिन्दी', 'Hindi', $time, $time],
            ['Hrvatski', 'Croatian', $time, $time],
            ['Magyar', 'Hungarian', $time, $time],
            ['Հայերեն', 'Armenian', $time, $time],
            ['Bahasa Indonesia', 'Indonesian', $time, $time],
            ['Íslenska', 'Icelandic', $time, $time],
            ['Italiano', 'Italian', $time, $time],
            ['日本語', 'Japanese', $time, $time],
            ['ქართული', 'Georgian', $time, $time],
            ['ភាសាខ្មែរ', 'Khmer', $time, $time],
            ['한국어', 'Korean', $time, $time],
            ['Kurdî', 'Kurdish', $time, $time],
            ['lingua latina', 'Latin', $time, $time],
            ['Lietuvių', 'Lithuanian', $time, $time],
            ['Latviešu', 'Latvian', $time, $time],
            ['Македонски', 'Macedonian', $time, $time],
            ['മലയാളം', 'Malayalam', $time, $time],
            ['Bahasa Melayu', 'Malay', $time, $time],
            ['Norsk (bokmål)', 'Norwegian (bokmal)', $time, $time],
            ['नेपाली', 'Nepali', $time, $time],
            ['Nederlands', 'Dutch', $time, $time],
            ['Norsk (nynorsk)', 'Norwegian (nynorsk)', $time, $time],
            ['ਪੰਜਾਬੀ', 'Punjabi', $time, $time],
            ['Polski', 'Polish', $time, $time],
            ['‏پښتو‏', 'Pashto', $time, $time],
            ['Português (Brasil)', 'Portuguese (Brazil)', $time, $time],
            ['Português (Portugal)', 'Portuguese (Portugal)', $time, $time],
            ['Română', 'Romanian', $time, $time],
            ['Русский', 'Russian', $time, $time],
            ['Slovenčina', 'Slovak', $time, $time],
            ['Slovenščina', 'Slovenian', $time, $time],
            ['Shqip', 'Albanian', $time, $time],
            ['Српски', 'Serbian', $time, $time],
            ['Svenska', 'Swedish', $time, $time],
            ['Kiswahili', 'Swahili', $time, $time],
            ['தமிழ்', 'Tamil', $time, $time],
            ['తెలుగు', 'Telugu', $time, $time],
            ['ภาษาไทย', 'Thai', $time, $time],
            ['Filipino', 'Filipino', $time, $time],
            ['Türkçe', 'Turkish', $time, $time],
            ['Українська', 'Ukrainian', $time, $time],
            ['Tiếng Việt', 'Vietnamese', $time, $time],
            ['Fejlesztő', 'Developer', $time, $time],
            ['中文(简体)', 'Simplified Chinese (China)', $time, $time],
            ['中文(香港)', 'Traditional Chinese (Hong Kong)', $time, $time],
            ['中文(台灣)', 'Traditional Chinese (Taiwan)', $time, $time],
        ];

        $this->batchInsert('{{%languages}}', [
            'name',
            'ascii_name',
            'created_at',
            'updated_at',
        ], $languages);
    }

    public function safeDown()
    {
        $this->truncateTable('{{%languages}}');
    }
}
