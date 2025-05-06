import js from '@eslint/js';
import prettier from 'eslint-plugin-prettier';

/** @type {import("eslint").Linter.FlatConfig[]} */
export default [
    js.configs.recommended,
    {
        files: ['**/*.js'],
        languageOptions: {
            ecmaVersion: 'latest',
            sourceType: 'module',
            globals: {
                window: 'readonly',
                document: 'readonly',
                $: 'readonly',
                jQuery: 'readonly',
            },
        },
        plugins: {
            prettier,
        },
        rules: {
            'prettier/prettier': 'off',
        },
    },
];
