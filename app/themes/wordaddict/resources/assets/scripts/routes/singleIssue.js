import logoAdapter from '../logoAdapter';

export default {
  init() {
    window.addEventListener('scroll', logoAdapter);
  },
}
