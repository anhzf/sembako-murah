module.exports = {
  root: true,
  parser: 'vue-eslint-parser',
  parserOptions: {
    ecmaVersion: 2021,
    sourceType: 'module',
  },
  extends: [
    // add more generic rulesets here, such as:
    // 'eslint:recommended',
    'plugin:vue/vue3-recommended',
    'airbnb-base',
  ],
  rules: {
    'import/no-unresolved': 'off',
    'import/no-extraneous-dependencies': 'off',

    'func-names': 'off',
    'max-len': 'off',

    'vue/max-len': ['warn', {
      code: 150,
      ignoreHTMLTextContents: true,
      ignoreHTMLAttributeValues: true,
    }],
  },
};
