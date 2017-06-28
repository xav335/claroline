import React from 'react'
import {shallow, mount} from 'enzyme'
import {
  spyConsole,
  renew,
  ensure,
  mockTranslator,
  mockTinymce
} from './../../utils/test'
import {Textarea} from './textarea.jsx'

describe('<Textarea/>', () => {
  beforeEach(() => {
    spyConsole.watch()
    mockTranslator()
    mockTinymce()
    renew(Textarea, 'Textarea')
  })
  afterEach(spyConsole.restore)

  it('has required props', () => {
    shallow(<Textarea/>)
    ensure.missingProps('Textarea', ['id', 'content', 'onChange'])
  })

  it('has typed props', () => {
    shallow(
      <Textarea
        id={true}
        content={[]}
        onChange="foo"
      />
    )
    ensure.invalidProps('Textarea', ['id', 'content', 'onChange'])
  })

  it('renders an editable div by default', () => {
    const area = mount(
      <Textarea
        id="ID"
        content="CONTENT"
        onChange={() => {}}
      />
    )
    ensure.propTypesOk()
    const textBox = area.find('div[role="textbox"]#ID')
    ensure.equal(textBox.length, 1)
    ensure.equal(textBox.text(), 'CONTENT')
  })

  it('renders a tinymce textarea if needed', () => {
    const area = mount(
      <Textarea
        id="ID"
        content="CONTENT"
        onChange={() => {}}
      />
    )
    ensure.propTypesOk()

    const toggle = area.find('span[role="button"]')
    ensure.equal(toggle.length, 1)

    toggle.simulate('click')
    ensure.equal(area.find('textarea#ID.claroline-tiny-mce').length, 1)
  })
})
