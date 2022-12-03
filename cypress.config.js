const { defineConfig } = require("cypress");
const allureWriter = require("@shelex/cypress-allure-plugin/writer");

async function setupNodeEvents(on, config) {

  allureWriter(on, config);

  return config;
}

module.exports = defineConfig({
  e2e: {
    setupNodeEvents,
    specPattern: "cypress/e2e/CARPART-Testing/Module1/*.js",
    baseUrl: "http://localhost/carpart-2022/index.php",
    chromeWebSecurity: false,
    env: {
      allureReuseAfterSpec: true,
    },
  },
});


