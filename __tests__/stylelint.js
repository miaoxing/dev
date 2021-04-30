import stylelint from 'stylelint';
import config from '../.stylelintrc.json';

describe('stylelint', () => {
  test('color-hex-length allow long', async () => {
    const result = await stylelint.lint({
      code: `
a {
  color: #ffffff;
}
`,
      config: config,
    });

    expect(result.results[0].warnings).toHaveLength(0);
    expect(result.errored).toBeFalsy();
  });
});
