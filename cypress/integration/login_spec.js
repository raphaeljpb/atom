describe('Login', () => {
  beforeEach('Fix Firefox cookie issue', () => {
    // https://github.com/cypress-io/cypress/issues/6375
    if (Cypress.isBrowser('firefox')) {
      cy.clearCookies()
    }
  })

  it('Logs in through the user menu', () => {
    cy.visit('/')
    cy.contains('Log in').click()
    cy.get('input#email').type(Cypress.env('adminEmail'))
    cy.get('input#password').type(Cypress.env('adminPassword'))
    cy.get('#user-menu form').submit()

    cy.get('#user-menu').click()
    cy.contains('My profile')
    cy.contains('Log out')
  })

  it('Logs in through the login page', () => {
    cy.visit('/user/login')
    cy.get('#content input#email').type(Cypress.env('adminEmail'))
    cy.get('#content input#password').type(Cypress.env('adminPassword'))
    cy.get('#content form').submit()

    cy.get('#user-menu').click()
    cy.contains('My profile')
    cy.contains('Log out')
  })
})
