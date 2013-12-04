package ru.regenix.jphp.runtime.reflection;

import ru.regenix.jphp.common.Modifier;
import ru.regenix.jphp.runtime.env.Context;
import ru.regenix.jphp.runtime.memory.support.Memory;
import ru.regenix.jphp.runtime.reflection.support.Entity;

import java.lang.reflect.Field;

public class PropertyEntity extends Entity {
    protected ClassEntity clazz;
    protected Modifier modifier = Modifier.PUBLIC;
    protected Memory defaultValue;
    protected DocumentComment docComment;

    protected boolean isStatic;
    protected Field field;

    public PropertyEntity(Context context) {
        super(context);
    }

    public Field getField() {
        return field;
    }

    public void setField(Field field) {
        field.setAccessible(true);
        this.field = field;
    }

    public DocumentComment getDocComment() {
        return docComment;
    }

    public void setDocComment(DocumentComment docComment) {
        this.docComment = docComment;
    }

    public Memory getDefaultValue() {
        return defaultValue;
    }

    public void setDefaultValue(Memory defaultValue) {
        this.defaultValue = defaultValue;
    }

    public Modifier getModifier() {
        return modifier;
    }

    public void setModifier(Modifier modifier) {
        this.modifier = modifier;
    }

    public boolean isStatic() {
        return isStatic;
    }

    public void setStatic(boolean aStatic) {
        isStatic = aStatic;
    }

    public ClassEntity getClazz() {
        return clazz;
    }

    public void setClazz(ClassEntity clazz) {
        this.clazz = clazz;
    }

    public boolean isDeprecated(){
        return false; // TODO
    }
}
